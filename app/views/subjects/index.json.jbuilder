json.array!(@subjects) do |subject|
  json.extract! subject, :id, :name, :teacher, :classroom
  json.url subject_url(subject, format: :json)
end
